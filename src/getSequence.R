info(logger, 'getSequence.R entered')
# names(car)
car[,"date"] <- as.integer(format(car[,"datatime"], "%d"))
car[,"hour"] <- as.integer(format(car[,"datatime"], "%H"))
car[,"min"] <- as.integer(format(car[,"datatime"], "%M"))


# spacepoints
llCRS <- CRS("+proj=longlat +ellps=WGS84")
coordinates(car) <- c("longitude", "latitude")
proj4string(car) <- llCRS
car_line <- Line(coordinates(car))
car_line <- Lines(car_line, ID="car_id")
car_line <- SpatialLines(list(car_line))
car_diff_dist <- rep(as.numeric(0), nrow(car) - 1)
n <- nrow(car) - 1
info(logger, paste('start to evaluating car_diff_dist with n:', n))
system.time(sapply(1:n, function(i) {
	if (i %% 100 == 0) 
		show(i)
	car_diff_dist[i] <<- spDists(car[i,], car[i+1,])[1]
}))
#load("temp.Rdata");car_diff_dist <- car_diff
car_diff_time <- rep(NA, nrow(car) - 1)
system.time(sapply(1:n, function(i) {
	car_diff_time[i] <<- car$datatime[i+1] - car$datatime[i]
}))

#sm.density(car_diff_dist / car_diff_time)
#plot(car_line)
#summary(car_sp)


rest.index <- which(sapply(car$hour, function(a) sum(a == 1:4)) > 0)
rest.center <- apply(coordinates(car[rest.index,]),2,mean)
rest.center <- SpatialPoints(coords=matrix(rest.center,1,2),proj4string=llCRS)
car_dist_to_rest_center <- spDists(rest.center, car)
car_rest_dist_to_rest_center <- spDists(rest.center,car[rest.index,] )
threshold <- sd(c(car_rest_dist_to_rest_center)) * 3

block.conn <- car_dist_to_rest_center > threshold
block.index <- rep(NA, length(block.conn))
index <- 1
for (i in 1:length(block.conn)) 
{
  if (!block.conn[i]) {
    block.index[i] <- 0
    index <- index + 1
    next
  }
  block.index[i] <- index
}
car_seq <- list()
car_seq_path_len <- c()
for(i in unique(block.index)[-1]) { # i <- 15
#   file_name <- as.character(i)
#   file_name <- paste(paste(rep("0", 4 - nchar(file_name)), collapse=""), file_name, sep="")
#   file_name <- paste("img/", car_id, "/", file_name, ".jpg", sep="")
#   jpeg(filename=file_name)
#   plot(car, col="white") 
#   points(car[which(block.index == i),])
#   dev.off()
  car_seq[[paste(i)]] <- car[which(block.index == i),]
  car_seq_path_len[paste(i)] <- sum(car_diff_dist[which(block.index == i)])
}

index.reasonable <- which(abs(car_seq_path_len - median(car_seq_path_len)) < path_threshold)
car_seq_line <- list()
index <- 1
for (i in names(car_seq_path_len)[index.reasonable])
{
  car_seq_line[[index]] <- Lines(Line(car_seq[[i]]),ID=i)
  index <- index + 1
}


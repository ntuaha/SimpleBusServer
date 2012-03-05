load(paste("data/carid_", car_id, ".Rdata", sep=""))
# car <- car_976
eval(parse(text=paste("car <- car_", car_id, sep="")))
eval(parse(text=paste("rm(car_", car_id, ")", sep="")))
# rm(car_976)
gc()
info(logger,'loadData.R finished')
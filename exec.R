{ # loading libraries
  library(Rinclude)
  library(sp)
#   library(outliers)
  library(vegan) # clustering
  library(log4r)
}

{ # parameter setting
  car_id <- as.integer(commandArgs()[4])
  path_threshold <- 10
}

{ # set logger
  logger <- create.logger()
  # Set the logger’s file output.
  logfile(logger) <- paste(getwd(), '/base.log', sep='')
  level(logger) <- log4r:::INFO
}

info(logger, paste("car_id:", car_id))

{ # loading data
  include("loadData.R", local=.GlobalEnv)
  include("src/getSequence.R", local=.GlobalEnv)
  include("src/getReasonableSequence.R", local=.GlobalEnv)
}

{ # save result
  save.image(file=paste("image/", car_id, ".Rdata", sep=""))
}

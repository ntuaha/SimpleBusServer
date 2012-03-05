{ # loading libraries
  library(Rinclude)
  library(sp)
#   library(outliers)
  library(vegan) # clustering
}

{ # parameter setting
  car_id <- 976
  path_threshold <- 10
}

{ # loading data
  include("loadData.R", local=.GlobalEnv)
  include("src/getSequence.R", local=.GlobalEnv)
  include("src/getReasonableSequence.R", local=.GlobalEnv)
}

{ # save result
  save.image(file=paste("image/", car_id, ".Rdata", sep=""))
}
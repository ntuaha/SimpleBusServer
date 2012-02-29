{ # loading libraries
  library(Rinclude)
}

{ # parameter setting
  car_id <- 976
}

{ # loading data
  include("loadData.R", local=.GlobalEnv)
}

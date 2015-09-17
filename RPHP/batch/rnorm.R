    args <- commandArgs(TRUE)
    N <- args[1]
    png(filename="temp.png", width=500, height=500)
    hist(rnorm(N,0,1), col="lightblue")
    dev.off()                                                
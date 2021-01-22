package main

import (
	"fmt"
	"time"
)

func main() {
	fizzCount := 0
	buzzCount := 0
	fizzBuzzCount := 0

	start := time.Now()

	for i := 1; i < 1000000000; i++ {
		if i%3 == 0 {
			if i%5 == 0 {
				fizzBuzzCount++
			} else {
				fizzCount++
			}
		} else if i%5 == 0 {
			if i%3 == 0 {
				fizzBuzzCount++
			} else {
				buzzCount++
			}
		}
	}

	toPrint := fmt.Sprint("fizzes: ", fizzCount, "\n",
		"buzzes: ", buzzCount, "\n",
		"fizzBuzzes: ", fizzBuzzCount, "\n",
		"completed_in: ", time.Since(start).Seconds(), " seconds \n")

	fmt.Println(toPrint)
}

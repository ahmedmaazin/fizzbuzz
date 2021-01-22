#!/usr/bin/env python

import time

fizzCount = 0
buzzCount = 0
fizzBuzzCount = 0
start = time.time()

for i in range(1, 1000000000):
    if i % 3 == 0:
        if i % 5 == 0:
            fizzBuzzCount += 1
        else:
            fizzCount += 1
    elif i % 5 == 0:
        if i % 3 == 0:
            fizzBuzzCount += 1
        else:
            buzzCount += 1

doneSeconds = (time.time() - start)

print("fizzes: " + str(fizzCount) + "\n",
      "buzzes: " + str(buzzCount) + "\n",
      "fizzBuzzes: " + str(fizzBuzzCount) + "\n",
      "completed_in: " + str(doneSeconds) + " seconds" + "\n")

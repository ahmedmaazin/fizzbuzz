fizzCount = 0
buzzCount = 0
fizzBuzzCount = 0

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

print("fizzes: " + str(fizzCount), "buzzes: " + str(buzzCount), "fizzBuzzes: " + str(fizzBuzzCount))

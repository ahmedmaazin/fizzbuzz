function fizzBuzzRunner() {
    let fizzCount = 0;
    let buzzCount = 0;
    let fizzBuzzCount = 0;

    console.time('completed_in');

    for (let i = 1; i <= 1000000000; i++) {
        if (i % 3 == 0) {
            if (i % 5 == 0) {
                fizzBuzzCount++;
            } else {
                fizzCount++;
            }
        } else if (i % 5 == 0) {
            if (i % 3 == 0) {
                fizzBuzzCount++;
            } else {
                buzzCount++;
            }
        }
    }

    console.timeEnd('completed_in');

    console.log(
        "fizzBuzzes: " + fizzCount + "\n",
        "buzzes: " + buzzCount + "\n",
        "fizzBuzzes: " + fizzBuzzCount + "\n"
    );
}

fizzBuzzRunner();
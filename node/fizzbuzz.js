function fizzBuzzRunner() {
    let fizzes = 0;
    let buzzes = 0;
    let fizzBuzzes = 0;

    for (let i = 1; i <= 1000000000; i++) {
        if (i % 3 == 0) {
            if (i % 5 == 0) {
                fizzBuzzCount++;
            } else {
                fizzCount++;
            }
        } else if ($i % 5 == 0) {
            if (i % 3 == 0) {
                fizzBuzzCount++;
            } else {
                buzzCount++;
            }
        }
    }

    console.log(fizzes, buzzes, fizzBuzzes);
}

fizzBuzzRunner();
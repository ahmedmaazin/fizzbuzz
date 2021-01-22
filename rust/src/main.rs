use std::time::Instant;

fn main() {
    let mut fizz_count = 0;  
    let mut buzz_count = 0; 
    let mut fizz_buzz_count = 0; 
    let start = Instant::now();

    for i in 1..1000000000 {
        if i % 3 == 0{
            if i % 5 == 0{
                fizz_buzz_count += 1;
            }else{
                fizz_count += 1;
            }
        }else if i % 5 == 0 {
            if i % 3 == 0{
                fizz_buzz_count += 1;
            }else{
                buzz_count += 1;
            }
        }
    }

    println!("fizzes: {}", fizz_count);
    println!("buzzes: {}", buzz_count);
    println!("fizzBuzzes: {}", fizz_buzz_count);
    println!("completed_in: {:.2?} seconds ", start.elapsed().as_secs());
}

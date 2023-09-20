<?php


//Task 1: Looping with Increment using a Function


// Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a
// step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function
// should take the arguments like start as 1, end as 20 and step as 2. You must call the
// function to print.
// Also do the same using while loop and do-while loop also.


// Task 2: Skip Multiples of 5
// Create a PHP script that prints numbers from 1 to 50 using a for loop. However, when the
// loop encounters a multiple of 5, it should skip that number using the continue statement and
// continue to the next iteration.


// Task 3: Break on Condition
// Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
// Fibonacci number is greater than 100, break out of the loop using the break statement.


// Task 4: Fibonacci Series printing using a Function
// Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
// this 15 as an argument of a function and use a for loop to generate these numbers and print
// them by calling the function.


// For loop
function basic_loop_for_even_number( $number = 0, $count = 0 ) {

	for ( $number; $number <= $count; $number++ ) {

		if ( ( $number % 2 ) == 0 ) {
			echo $number . "\n";
		}
	}
}

//While Loop
function while_loop_for_even_number( $number = 0, $count = 0 ) {

	while ( $number <= $count ) {

		if ( ( $number % 2 ) == 0 ) {
			echo $number . "\n";
		}
		$number++;
	}
}

//Do While Loop
function dowhile_loop_for_even_number( $number = 0, $count = 0 ) {

	do {
		if ( $number % 2 == 0 ) {
			echo $number . "\n";
		}
		$number++;
	} while ( $number <= $count );
}




function isMultiple( $number, $step ) {
	while ( $number > 0 ) {
		$number = $number - $step;
		if ( $number == 0 ) {
			return false;
		}
	}
	return true;
}

function skip_multiple_value( $number = 0, $count = 0, $step = 0 ) {
	for ( $number; $number <= $count; $number++ ) {
		if ( isMultiple( $number, $step ) ) {
			echo $number . "\n";
			continue;
		}
	}
}



//Task 3: Break on Condition

function Fibonacci( $number ) {

	if ( $number == 0 ) {
		return 0;
	} else if ( $number == 1 ) {
		return 1;

	} else {
		return ( Fibonacci( $number - 1 ) +
			Fibonacci( $number - 2 ) );
	}
}


function series_fibonacchi( $number = 0 ) {

	for ( $counter = 0; $counter < $number; $counter++ ) {
		//var_dump( $counter );
		$febo = Fibonacci( $counter );
		echo $febo . ", ";

	}

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Assignment for module two</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body>


	<div class="w-full bg-white rounded shadow-lg p-8 m-4 md:max-w-lg md:mx-auto">
		<h1 class="block w-full text-center text-grey-darkest mb-6 font-bold text-lg text-grey-darkest">Task 1: Looping
			with
			Increment using a Function</h1>
		<div class="items-center">
			<h1 class="block w-full text-center text-grey-darkest mb-6 font-bold text-lg text-grey-darkest">Print all
				even numbers from 1 to 20</h1>

			<?php basic_loop_for_even_number( 1, 20 ); ?>
		</div>
		<div class="items-center">
			<h1 class="block w-full text-center text-grey-darkest mb-6 font-bold text-lg text-grey-darkest">Using while
				loop</h1>

			<?php while_loop_for_even_number( 1, 20 ); ?>
		</div>
		<div class="items-center">
			<h1 class="block w-full text-center text-grey-darkest mb-6 font-bold text-lg text-grey-darkest">Using do
				while loop</h1>

			<?php dowhile_loop_for_even_number( 1, 20 ); ?>
		</div>
	</div>

	<div class="w-full bg-white rounded shadow-lg p-8 m-4 md:max-w-lg md:mx-auto">
		<h1 class="block w-full text-center text-grey-darkest mb-6 font-bold text-lg text-grey-darkest">Task 2: Skip
			Multiples of 5</h1>
		<div class="flex flex-col ">
			<div class="basis-1">
				<div class="name">
					<?php echo skip_multiple_value( 1, 50, 5 ); ?>
				</div>
			</div>

		</div>
	</div>

	<div class="w-full bg-white rounded shadow-lg p-8 m-4 md:max-w-lg md:mx-auto">
		<h1 class="block w-full text-center text-grey-darkest mb-6 font-bold text-lg text-grey-darkest">Task 3: Break on
			Condition</h1>
		<div class="flex flex-col ">
			<div class="basis-1">
				<div class="name">
					<?php $number = 15;
					for ( $counter = 0; $counter < $number; $counter++ ) {
						$febo = Fibonacci( $counter );

						if ( $febo >= 100 ) {
							break;
						}
						echo $febo . ", ";

					} ?>
				</div>
			</div>

		</div>
	</div>
	<div class="w-full bg-white rounded shadow-lg p-8 m-4 md:max-w-lg md:mx-auto">
		<h1 class="block w-full text-center text-grey-darkest mb-6 font-bold text-lg text-grey-darkest">Task 4:
			Fibonacci Series printing using a Function</h1>
		<div class="flex flex-col ">
			<div class="basis-1">
				<div class="name">
					<?php series_fibonacchi( 15 ); ?>
				</div>
			</div>

		</div>
	</div>
</body>

</html>

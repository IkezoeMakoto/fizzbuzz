package main

import (
	"fmt"
	"strconv"
)

const LIMIT_NUM = 50;

func main() {
	for i := 0; i < LIMIT_NUM; i++ {
		fmt.Println(judgment(i))
	}
}

func judgment(i int) string {
	var isFizz = i % 3 == 0
	var isBuzz = i % 5 == 0

	if isFizz && isBuzz {
		return "fizzbuzz"
	}

	if isFizz {
		return "fizz"
	}

	if isBuzz {
		return "buzz"
	}

	return strconv.Itoa(i)
}
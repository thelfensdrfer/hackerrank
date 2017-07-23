#!/bin/python3


if __name__ == "__main__":
    arr = sorted(list(map(int, input().strip().split(' '))))
    min_sum = 0
    max_sum = 0

    for i in range(4):
        min_sum = min_sum + arr[i]
        max_sum = max_sum + arr[4 - i]

    print(str(min_sum) + " " + str(max_sum))

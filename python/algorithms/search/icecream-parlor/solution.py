#!/bin/python3


def flavors(m, n, c_i):
    min_i = 0
    max_i = n - 1

    c_i_sorted = sorted(c_i)

    while True:
        amount = c_i_sorted[min_i] + c_i_sorted[max_i]

        if amount > m:
            max_i = max_i - 1
        elif amount < m:
            min_i = min_i + 1
        else:
            index_1 = c_i.index(c_i_sorted[min_i]) + 1
            index_2 = c_i.index(c_i_sorted[max_i]) + 1
            i = 0
            while index_2 == index_1:
                i = i + 1
                index_2 = c_i.index(c_i_sorted[max_i], i) + 1

            return sorted([index_1, index_2])


if __name__ == "__main__":
    t = int(input().strip())
    for t_i in range(t):
        m = int(input().strip())
        n = int(input().strip())
        c_i = list(map(int, input().strip().split(' ')))
        flavors_index = flavors(m, n, c_i)
        print(str(flavors_index[0]) + " " + str(flavors_index[1]))

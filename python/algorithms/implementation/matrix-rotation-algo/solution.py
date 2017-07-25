#!/bin/python3

import math


def rotate_coordinate(i, j, m, n, r, rotations):
    circle = min(i, j, m - i, n - j)
    r = rotations[circle]

    while r > 0:
        if j == circle and i < m - circle:
            # Move down
            i += 1
        elif m - i == circle and j < n - circle:
            # Move right
            j += 1
        elif n - j == circle and i > circle:
            # Move up
            i -= 1
        elif i == circle and j > circle:
            # Move left
            j -= 1
        else:
            print("NO MOVE FOUND!")
            exit(1)

        r -= 1

    return [i, j]


def rotate(m, n, r, matrix):
    # Clone matrix
    rotated_matrix = [x.copy() for x in matrix]

    # Rotate matrix just once (with an offset)
    number_cycles = math.ceil(min(m, n) / 2)
    rotations = []
    for i in range(number_cycles):
        one_rotation = 2 * (m - (2 * i) - 1) + 2 * (n - (2 * i) - 1)
        rotations.append(r % one_rotation if r >= one_rotation else r)

    for i in range(m):
        for j in range(n):
            # Substract 1 from matrix dimensions because i and j are 0 indexed
            new_coordinates = rotate_coordinate(i, j, m - 1, n - 1, r, rotations)
            rotated_matrix[new_coordinates[0]][new_coordinates[1]] = matrix[i][j]

    return rotated_matrix


if __name__ == "__main__":
    matrix = []
    m, n, r = list(map(int, input().strip().split(' ')))

    for i in range(m):
        matrix.append(list(map(int, input().strip().split(' '))))

    matrix = rotate(m, n, r, matrix)
    for i in range(m):
        print(" ".join(str(x) for x in matrix[i]))

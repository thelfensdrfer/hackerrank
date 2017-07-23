#!/bin/python3


def solve(grades):
    rounded_grades = []

    for grade in grades:
        if grade < 38:
            rounded_grades.append(grade)
        else:
            mod = grade % 5
            if mod >= 3:
                rounded_grades.append(grade + (5 - mod))
            else:
                rounded_grades.append(grade)

    return rounded_grades


if __name__ == "__main__":
    n = int(input().strip())
    grades = []
    grades_i = 0
    for grades_i in range(n):
        grades_t = int(input().strip())
        grades.append(grades_t)
    result = solve(grades)
    print("\n".join(map(str, result)))

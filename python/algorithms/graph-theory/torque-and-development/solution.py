#!/bin/python3

import queue


def cost_repair(city_connections, number_of_cities, c_lib, c_road):
    print("Start")

    if c_lib < c_road:
        return number_of_cities * c_lib

    print("Generate adjacent matrix for " + str(number_of_cities) + "")

    adj_cities = [[0] * number_of_cities for row in range(number_of_cities)]

    print("Insert connections in adjacent matrix")

    for city_connection in city_connections:
        adj_cities[city_connection[0] - 1][city_connection[1] - 1] = 1
        adj_cities[city_connection[1] - 1][city_connection[0] - 1] = 1

    components = [0 for x in range(number_of_cities)]
    visited = [0 for x in range(number_of_cities)]

    print("Counting components and vertices")

    for current_city in range(number_of_cities):
        print(current_city)
        current_components = [0 for x in range(number_of_cities)]
        if visited[current_city] == 0:
            current_components[current_city] = 1
        else:
            continue
        visited[current_city] = 1
        q = queue.Queue()
        q.put(current_city)

        while q.empty() is False:
            current = q.get()
            for i in range(number_of_cities):
                if adj_cities[current][i] == 1 and current_components[i] == 0 and visited[i] == 0:
                    visited[i] = 1
                    current_components[i] = 1
                    q.put(i)

        components[current_city] = sum(current_components)

    print("Generating costs")

    number_components = len(list(filter(lambda x: x > 0, components)))
    return (number_components * c_lib) + ((sum(components) - number_components) * c_road)


if __name__ == "__main__":
    print("WIP!")
    exit(1)

    q = int(input().strip())
    for a0 in range(q):
        n, m, c_lib, c_road = input().strip().split(' ')
        n, m, c_lib, c_road = [int(n), int(m), int(c_lib), int(c_road)]

        city_connections = []
        for a1 in range(m):
            city_1, city_2 = input().strip().split(' ')
            city_1, city_2 = [int(city_1), int(city_2)]

            city_connections.append([city_1, city_2])

        print(cost_repair(city_connections, n, c_lib, c_road))

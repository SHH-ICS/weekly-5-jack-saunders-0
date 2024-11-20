def calculate_pi(iterations):
    # Leibniz formula to calculate pi
    pi_value = 0
    for i in range(iterations):
        pi_value += ((-1) ** i) / (2 * i + 1)
    pi_value *= 4
    return pi_value

def main():
    # Read number of iterations from input (stdin)
    iterations = int(input().strip())
    
    # Calculate Pi
    pi_value = calculate_pi(iterations)
    
    # Print the result with 6 decimal places
    print(f"{pi_value:.6f}")

if __name__ == "__main__":
    main()

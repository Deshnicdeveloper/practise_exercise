#include <stdio.h>

int fib(int n); //declare varaible

int main(){
    // ask for the number
    int n;
    printf("Enter number to calculate: \n"); // collect the number to do the factorisation
    scanf("%d", &n);

    int result = fib(n); // calling the function and storing the data in a variable

    printf("the fibonacci of fib%d", n ); // print the result
    printf(" is: %d", result);

    return 0;
}

int fib(int n){
    int result; // declaring the variable here

    if (n == 0){
        return 0;
    }else if(n == 1){
        return 1;
    }
    else{
        result = fib(n-1) + fib(n-2) ; //here is the recursion that happens. I am calling the function inside the function
        return result; // we return the result
    }
}
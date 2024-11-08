#include <stdio.h>

int facotrial(int n); //declare varaible

int main(){
    // ask for the number
    int n;
    printf("Enter number to calculate: \n"); // collect the number to do the factorisation
    scanf("%d", &n);

    int result = facotrial(n); // calling the function and storing the data in a variable

    printf("the factorial is %d", result ); // print the result

    return 0;
}

int facotrial(int n){
    int result; // declaring the variable here

    if (n == 1){
        return 1;
    }else{
       result = n * facotrial(n-1); //here is the recursion that happens. I am calling the function inside the function
        return result; // we return the result
    }
}
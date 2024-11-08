#include<stdio.h>
int greatNum();       // function declaration with an interger
int main()
{
    int result;
    result = greatNum();        // function call
   printf("The greater number is: %d", result);
    return 0;
}
int greatNum() {        // function definition  
int i, j, greaterNum;
    printf("Enter 2 numbers that you want to compare...");
    scanf("%d%d", &i, &j);
    if(i > j) {
        greaterNum = i;
    }
    else {
        greaterNum = j;
    }
    // returning the result
    return greaterNum;
}
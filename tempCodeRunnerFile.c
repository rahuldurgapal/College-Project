#include<stdio.h>
void main()
{
     int a=30;
     int *p,**p1;
     p=&a,**p1=&(*p);

     printf("value of p = adrres of a=%p\n",p);
     printf("incremented adrres of p is %p\n",p++);
     printf("decremented adrress of p is %p\n",p--);
     printf("value of a=%d\n",*p);
     printf("value of a is %d\n",**p1);
}
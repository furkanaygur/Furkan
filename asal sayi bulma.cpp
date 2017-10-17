#include <stdio.h>
#include <conio.h>
#include <locale.h>
main()
{
	setlocale(LC_ALL,"Turkish");
	int sayi1=0,a=0;
	printf(" Birinci sayiyi girin = ");
	scanf("%d",&sayi1);
	for(int i=2;i<sayi1;i++)
	{
		if(sayi1%i==0)
		{
			a++;
		}		

	}
	if(a==0)
	{
		printf("sayi asaldir");
	}
	else
	{
		printf("sayi asal degidir");
		return 0;
	}
	getch();
}	

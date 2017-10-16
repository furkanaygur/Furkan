#include <stdio.h>
#include <conio.h>
#include <stdlib.h>
#include <time.h>

main()
{
	int sayi=0,depo=0,toplam=0,sonuc=0;
	
	/*
	srand(time(NULL));
	sayi=5+rand()%100;//5 ile 105 arasý 105 dahil deðil
	sayi=3+rand()%5;//3 den baslýyor 3 4 5 6 7 
	/* sayi=A+rand()½B;
	A ile a+b arasýnda a+b dahil deðil a dahil
	*/ /*
	printf("%d\n",sayi);
	
	*/
 /*	srand(time(NULL));
	for(int i=0;i<20;i++)
	{
		sayi=25+rand()%225;//25 ile 250 arasýnda 250 dahil deðil
		if(sayi>100&&sayi<175&&sayi%2==0)
		{
			printf("\nsayi = %d",sayi);
		}
	}
	*/
	
	srand(time(NULL));
	for(int i=0;i<10;i++)
	{
		sayi=67+rand()%116;
		if(sayi>66&&sayi<183&&sayi%2==0)
		{
			depo=depo+1;
			toplam=toplam+sayi;
			printf("\nsayi cift = %d",sayi);
			
		}
	
	}
	printf("\n depo = %d",depo);
	printf("\n topalam = %d",toplam);
	sonuc=toplam/depo;
	printf("\n ortalama = %d",sonuc);
	getch();
	
	
}

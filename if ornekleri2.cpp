#include <stdio.h>
#include <conio.h>
#include <locale.h>
main()
{
	int sayi1,sayi2,islem=0;
	setlocale (LC_ALL, "Turkish");
	printf("birinci say�y� giriniz: ");
	scanf("%d",&sayi1);
	printf("�kinci say�y� giriniz: ");
	scanf("%d",&sayi2);
	printf("1. Toplama \n 2. ��karma \n Se�iminizi girin (1 & 2) ");
	scanf("%d",&islem);
	if(islem==1)
	{
		printf("sonuc = %d",sayi1+sayi2);
	}
	else if (islem==2)
	{
		printf("sonuc = %d",sayi1-sayi2);
	}
	else
	{
		printf("Hatal� giri� yapt�n�z Yaln�zca 1 veya 2 yi tu�lay�n�z.");
	}
	getch();
}

#include <stdio.h>
#include <conio.h>
#include <locale.h>
main()
{
	int sayi1,sayi2,islem=0;
	setlocale (LC_ALL, "Turkish");
	printf("birinci sayýyý giriniz: ");
	scanf("%d",&sayi1);
	printf("Ýkinci sayýyý giriniz: ");
	scanf("%d",&sayi2);
	printf("1. Toplama \n 2. Çýkarma \n Seçiminizi girin (1 & 2) ");
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
		printf("Hatalý giriþ yaptýnýz Yalnýzca 1 veya 2 yi tuþlayýnýz.");
	}
	getch();
}

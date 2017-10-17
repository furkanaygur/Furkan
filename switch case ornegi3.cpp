#include <stdio.h>
#include <conio.h>
#include <locale.h>
main()
{
	setlocale(LC_ALL,"Turkish");
	int sayi1=0,sayi2=0,islem=0;
	printf(" Birinci sayiyi girin = ");
	scanf("%d",&sayi1);
	printf(" Ýkinci sayiyi girin = ");
	scanf("%d",&sayi2);
	printf("***Menu*** \n [1] Toplama \n [2] Cikarma \n [3] Bolme \n [4] Carpma \n Isleminiz : ");
	scanf("%d",&islem);
	switch(islem)
	{
		case 1:
			printf("sonuc : %d",sayi1+sayi2);
		break;
		case 2:
			printf("sonuc : %d",sayi1-sayi2);
		break;
		case 3:
			printf("sonuc : %d",sayi1/sayi2);
		break;
		case 4:
			printf("sonuc : %d",sayi1*sayi2);
		break;
		
	}
	
	
}	

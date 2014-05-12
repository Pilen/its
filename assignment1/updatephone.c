#include <stdio.h>

main (int argc, char *argv)
{

char user_input[100];
char phone[100] = "35321400"; //default main number

/* Fetch user's (argv[1]) phone from DB */
/* ... */
printf("User's phone is: %s\n", phone);
fflush(NULL);

printf("Type new phone number:\n");
gets(user_input);

snprintf(phone, sizeof(phone), user_input);

/* Update user's phone in DB */
/* ... */
printf("User's phone is now: %s\n", phone);

}

#include<sys/stat.h>
#include<sys/types.h>
#include<signal.h>
#include<unistd.h>
#include<iostream>
#include<fcntl.h>
#include<cstdlib>
using namespace std;
int main(int argc,char** argv)
{

sleep(atoi(argv[1]));	
return kill(atoi(argv[0]),SIGTERM);
}


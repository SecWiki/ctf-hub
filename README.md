# CTF-HUB #
## Brief introduction ##
This is the first time we have written a project, some of which are collected from other CTF competitions. Still others are written by myself. Maybe these questions are not enough for the big guys, but doing things is to do well. The work is need near perfect.I hope to bring you happiness.  

**CTF Topic list**

- **Web**
	- web_1
	- web_2
	- web_3
	- web_4
	- web_5
- **Misc**
	- Misc_1
	- Misc_2
	- Misc_3
	- Misc_4
- **Crypto**
	 - hex
	 - base

- **Android**
	 - And_1
- **Reverse**
	- re_1
	- re_2
	- re_3
	- re_4
- **Pwn**

## Configuration method ##
```bash
# Need python environment, you also need to install pip

# installation docker
curl -s https://get.docker.com/ | sh

# Start the docker service
service docker start

# Install compose
pip install docker-compose 

# Other operating system installations of docker and docker-compose may be slightly different, please read the Docker documentation for installation.

# Pull project
git clone https://github.com/SecWiki/ctf-hub/ctf-hub.git
cd ctf-hub

# Enter the environment directory of a vulnerability
cd web/web1

# Automated compilation
docker-compose build

# Start the entire environment
docker-compose up -d
```
 - There is a corresponding documentation in each environment directory, please read this file for vulnerability/environment testing.

## Project maintenance ##
- WUJINLIN  
[http://www.whj.website/](http://www.whj.website/)
- sh1llc0de  
[https://www.sh1llc0de.xyz/](https://www.sh1llc0de.xyz/)
## Disclaimer ##
Do not use it for illegal purposes, otherwise the serious consequences will not be related to this project.。

## Reference link ##
 - [https://ctf-wiki.github.io/ctf-wiki/](https://ctf-wiki.github.io/ctf-wiki/)  
 - [https://www.sec-wiki.com/](https://www.sec-wiki.com/)
 
## Reprint ##
Reprinted source：[https://github.com/SecWiki/ctf-hub/](https://github.com/SecWiki/ctf-hub/)

©WUJINLIN,sh1llc0de 2018

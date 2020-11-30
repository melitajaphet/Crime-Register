from urllib.request import urlopen as uReq
from bs4 import BeautifulSoup as soup
from googletrans import Translator

url = "https://mumbaipolice.gov.in/Police_incharge"
translator = Translator()

uClient = uReq(url)
page_html = uClient.read()
uClient.close()

page_soup = soup(page_html, "html.parser")

def get_area():
    areas = page_soup.findAll("select",{"class":"classic-in ps-select"})
    a = areas[0]
    area = a.findAll("option")

    for i in range(1, len(area)):
        temp = area[i].text
        area[i] = translator.translate(temp, src='mr', dest='en')
        print(area[i].text)

get_area()
        
    

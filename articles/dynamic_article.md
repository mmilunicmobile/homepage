from datetime import date
import requests

today = date.today()
todays_date = today.strftime("%B %d, %Y")

r = requests.get(f'http://numbersapi.com/{today.strftime("%m/%d")}/date')

print(f"""## Purpose

When I first made this website, I wanted it mosty to be a home to articles. I have somewhat failed to actually populate this website with articles so far, but that's just because I'm so darn busy. I have plenty of things I need to spend time on, schoolwork, homework, extracurriculars, etc. Anyway, the main point of this is that if I want to be able to write an article, I need to be able to do it quickly and without much strife, hence the simple markdown formatter which I am able to use to make nice(ish) looking pages for your viewing pleasure in relatively short amounts of time. 

Although the backend may not be completely optimized, and the website may completely re‑render a page ever time you make a request for a page, all I need to do is add a file. No need to run some fancy build command, no need to learn some crazy Javascript library just to put some text online, just good, old fashioned, PHP. A few of you may find this system appaling, and with good reason, but it is currently good enough for me. Well, *almost*...

## The Problem

Other than having long loading times for doing stuff, my web pages also have no way of changing without me modifying them.

Now, this is especially annoying since a lot of information like the fact that todays date is {todays_date} changes quite often. I mean, if I had to change the page manually *every single time* I wanted to update it, it would be very difficult for me to let you know that {r.text}

This my friend is due to a wonderful thing known as on the fly page generation! To put it simply, I have a flag in the article metadata section of my website that tells the page loader whether a page is a Markdown file, or a Python script that prints out Markdown. If it is the former it simply renders it as I have detailed in previous articles. If it is a Python script, it runs the script, taking the output and treating that as a Markdown file. This may sound as though some security concerns may arise, but since I have no user input, it is very unlikely that any attacks arise.
""")
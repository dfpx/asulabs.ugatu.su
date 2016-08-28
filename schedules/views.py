from django.shortcuts import render
from django.http import HttpResponse # Импортируем модуль ответов HTTP

# Create your views here.
def index(request):
    return HttpResponse("Hello, World.")

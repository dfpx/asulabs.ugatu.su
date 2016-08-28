from django.conf.urls import url

from . import views # Импортируем из этого же приложения представления

urlpatterns = [
    url(r'^$', views.index, name='index'),
]

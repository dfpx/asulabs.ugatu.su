from django.db import models

# Create your models here.

class Lecturer(models.Model): ### ПРЕПОДАВАТЕЛЬ ###
    first_name = models.CharField(max_length = 30)
    second_name = models.CharField(max_length = 20)
    third_name = models.CharField(max_length = 20)
    cabinet = models.CharField(max_length = 6)
    profile_portal = models.URLField
    profile_gplus = models.URLField
    profile_vk = models.URLField
    profile_fb = models.URLField
    phone_number = 
    email = models.EmailField
    photo = models.ImageField

class Lesson(models.Model): ### ЗАНЯТИЕ ###
    # Лаб.работы, лекции, практики, госэкзамены, предзащита, защита, консультация, экзамен
    lesson_type = models.CharField(max_length = 100) # Тип занятия
    student_group = # Номер студенческой группы
    lecturer = # Преподаватель
    discipline = # Дисциплина
    period = # Длительность занятия (в ???)
    room = # Номер дисплейного класса
    pub_chain = # Идентификатор цепочки для упрощения редактирования

class Chain(models.Model): ### ЦЕПОЧКА ЗАПИСЕЙ ###
    pub_date = models.DateTimeField('date published') # Дата и время добавления записи
    pub_user = # Пользователь, создавший запись

from django.db import models # type: ignore

# Create your models here.

class Registration(models.Model):
    name = models.CharField(max_length=100)
    surname = models.TextField(max_length=250)
    age = models.IntegerField()
    
    def __str__(self):
        return self.name
    
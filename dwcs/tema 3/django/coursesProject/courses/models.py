from django.db import models # type: ignore

# Create your models here.
class Courses(models.Model):
    name = models.CharField(max_length=100)
    description= models.TextField(max_length=250)
    photo = models.ImageField(upload_to='images/')
    
    def __str__(self):
        return self.name
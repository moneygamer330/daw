from django.db import models

# Create your models here.

class Blog(models.Model):
    id = models.AutoField(primary_key=True)
    title = models.CharField(max_length=200)
    summary = models.CharField(max_length=200)
    date = models.DateField()
    url = models.URLField(blank=True)


    def __str__(self):
        return self.title
    

from django.db import models

# Create your models here.

class Blog(models.Model):
    title = models.CharField(max_length=200, blank=False, null=False),
    description = models.TextField(max_length=200, blank=False, null=False, default="Portfolio blog"),
    date = models.DateTimeField(auto_now_add=True)
    

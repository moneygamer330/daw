from django.db import models

# Create your models here.

class Video(models.Model):
    title = models.CharField(max_length=200) 
    description = models.TextField(blank=True, null=True)  
    file = models.FileField(upload_to='video/')  
    upload_date = models.DateTimeField(auto_now_add=True)  

    def __str__(self):
        return self.title
    
    @property
    def is_video(self):
        return self.file.name.lower().endswith(('.mp4', '.mov', '.avi'))
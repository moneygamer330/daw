from django.shortcuts import render, redirect
from video.forms import VideoForm

def upload_video(request):
    if request.method == 'POST':
        form = VideoForm(request.POST, request.FILES)
        if form.is_valid():
            form.save()
            return redirect('home:home')
    else:
        form = VideoForm()
    return render(request, 'videos/upload_videos.html', {'form': form})

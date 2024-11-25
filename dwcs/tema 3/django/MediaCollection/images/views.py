from django.shortcuts import render, redirect
from images.forms import ImageForm

def upload_image(request):
    if request.method == 'POST':
        form = ImageForm(request.POST, request.FILES)
        if form.is_valid():
            form.save()
            return redirect('home:home')
    else:
        form = ImageForm()
    return render(request, 'images/upload_image.html', {'form': form})

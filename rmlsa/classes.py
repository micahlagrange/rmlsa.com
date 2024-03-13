from io import BytesIO
import os
from PIL import Image
from django.core.files.uploadedfile import SimpleUploadedFile

__author__ = 'micah'


def create_thumbnail(img_model):
    if not img_model.image:
        return

    thumbnail_size = (200, 200)

    django_type = img_model.image.file.content_type

    if django_type == 'image/jpeg':
        pil_type = 'jpeg'
        ext = 'jpg'
    elif django_type == 'image/png':
        pil_type = 'png'
        ext = 'png'
    elif django_type == 'image/gif':
        pil_type = 'gif'
        ext = 'gif'
    else:
        raise TypeError(
            '{} File type not supported. Please use .jpg, .jpeg, .gif or .png.')

    r = BytesIO(img_model.image.read())
    fullsize_image = Image.open(r)
    new_image = fullsize_image.copy()

    new_image.thumbnail(thumbnail_size, Image.Resampling.LANCZOS)

    # Save the thumbnail
    temp_handle = BytesIO()
    new_image.save(temp_handle, pil_type)
    temp_handle.seek(0)

    # Save image to a SimpleUploadedFile which can be saved into ImageField
    suf = SimpleUploadedFile(os.path.split(
        img_model.image.name)[-1], temp_handle.read(), content_type=django_type)

    # Save SimpleUploadedFile into image field
    try:
        img_model.thumbnail.save('{}_thumbnail.{}'.format(
            os.path.splitext(suf.name)[0], ext), suf, save=False)
    except Exception as e:
        raise ValueError(e)

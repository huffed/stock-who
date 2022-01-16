FROM python:3.6.1-alpine
RUN pip install --upgrade pip
RUN apk update \
  amp;amp; apk add \
    build-base \
    postgresql \
    postgresql-dev \
    libpq
RUN mkdir /py/
WORKDIR /py/
COPY ./py/requirements.txt .
RUN pip install -r requirements.txt
ENV PYTHONUNBUFFERED 1
COPY . .

Test app running the below code: 
# Build the database image
docker image build -t cv-db -f Dockerfile.db .

# Build the web image 
docker image build -t cv-web -f Dockerfile.web .

# Run the database component
docker container run -d --name db --net app-net -e MYSQL_ROOT_PASSWORD=<some-pass> cv-db

# Run the web component
docker container run -d --name web --net app-net -p 8000:80 cv-web

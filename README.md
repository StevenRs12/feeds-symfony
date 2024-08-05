# Feeds Microservice using symfony

Symfony, PHP8, Mongo
## Requirements

- PHP 8.0+
- Composer
- Symfony CLI
- MongoDB
- PHP MongoDB extension

## Installation

Clone the repository to your local

### Install Dependencies

Use Composer to install the project dependencies:

composer install



### Configuration

#### Database

Ensure MongoDB is installed and running on your system. Specific steps may vary depending on your operating system.

##### Create a new database and collection

You can create a new database and collection directly via the MongoDB shell:

mongo
use your_database_name
db.createCollection('your_collection_name')

#### Set Environment Variables

Create `.env` and adjust the configuration settings:

Edit the `.env` file with your local details, such as the MongoDB connection string, etc.

DATABASE_URL=mongodb://localhost:27017/your_database_name



#### Migrations

If your project utilizes a schema that needs to be migrated or updated in MongoDB, use specific scripts or Symfony command commands (if available) to manage these changes.

### Run the Server

Use the Symfony CLI to start the development server:

symfony server:start



The server should now be accessible at `http://localhost:8000`.

## Usage

Describe how to use the project, including possible access routes, available CLI commands, and any other relevant aspects.

## Contributing

Instructions for other developers on how to contribute to the project.

## License

Include details of the license under which the project is distributed (e.g., MIT, GPL, etc.).

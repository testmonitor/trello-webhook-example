## Trello Webhook Integration Example

This Laravel application is designed to handle webhook calls from TestMonitor and create Trello cards automatically whenever an issue is created in TestMonitor.

The purpose of this application is to provide an example for building a webhook integration for TestMonitor. Feel free to use this code in any way you see fit.

## Installation

To set up and run this application locally, please follow these steps:

1. Clone the repository to your local machine:

   ```shell
   git clone https://github.com/testmonitor/trello-webhook-example.git
   ```
2. Navigate to the project directory:

   ```shell
   cd trello-webhook-example
   ```

3. Install the project dependencies using Composer:

   ```shell
   composer install
   ```

4. Rename the .env.example file to .env:

   ```shell
   mv .env.example .env
   ```

5. Generate the application key:

   ```shell
   php artisan key:generate
   ```

6. Configure the following environment variables in the .env file:

    - **APP_URL**: The URL of your Laravel application.
    - **TRELLO_API_KEY**: Your Trello API key. You can obtain this by creating an API key in your Trello account settings.
    - **TRELLO_API_TOKEN**: Your Trello API token. You can generate this token by authorizing your application with your Trello account.
    - **TRELLO_LIST_ID**: The ID of the Trello list within the board where you want the cards to be created. You can find the list ID in the Trello board URL.

7. Set up a publicly accessible endpoint for your application to receive webhooks. You can use tools like ngrok to create a temporary public URL for testing purposes.

8. Configure the webhook URL in TestMonitor to point to this application's webhook endpoint. For example: https://your-app-url/webhook.

9. Start the local development server:

   ```shell
   php artisan serve
   ```

The application should now be running locally and ready to receive webhook calls.

## Usage

Once the application is set up and running, it will automatically create Trello cards whenever a webhook is received. Each webhook call representing an issue will trigger the creation of a new card in the specified Trello board and list. The card will contain relevant information about the issue, such as its title and its description

You can monitor the Trello board to track the created cards and manage the reported issues efficiently.

## Contributing

Contributions are welcome! If you would like to contribute to this project, please follow these steps:

1. Fork the repository.
2. Create a new branch for your feature or bug fix.
3. Make your changes and commit them with descriptive messages.
4. Push your changes to your forked repository.
5. Submit a pull request to the main repository.

## License

This project is licensed under the [MIT License](LICENSE.md).
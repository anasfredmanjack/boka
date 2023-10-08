
const apiKey = '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'; // Replace with your API key

document.addEventListener('DOMContentLoaded', () => {
    const chatContainer = document.getElementById('chatcontainer');
    const userInput = document.getElementById('userinput');
    const sendButton = document.getElementById('submitbtn');

    sendButton.addEventListener('click', () => {
        const userMessage = userInput.value;

        // Add the user's message to the chat container
        appendMessage('User', userMessage);

        // Clear the user input field
        userInput.value = '';

        // Send the user's message to ChatGPT
        sendToChatGPT(userMessage);
    });

    function appendMessage(sender, message) {
        const messageElement = document.createElement('div');
        messageElement.innerHTML = `<strong>${sender}:</strong> ${message}`;
        chatContainer.appendChild(messageElement);
    }

    async function sendToChatGPT(userMessage) {
        try {
            const response = await fetch('https://api.openai.com/v1/chat/completions', {
                method: 'POST',
                headers: {
                    'Authorization': `Bearer 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`,
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    model: "gpt-3.5-turbo",
                    messages: userMessage,
                    max_tokens: 10, // Adjust based on desired response length
                    temperature: 0.7
                }),
            });

            const responseData = await response.json();
            console.log(responseData);
            const chatGPTResponse = responseData.choices[0].text;

            // Add ChatGPT's response to the chat container
            appendMessage('ChatGPT', chatGPTResponse);
        } catch (error) {
            console.log('Error sending message to ChatGPT:', error);
        }
    }
});

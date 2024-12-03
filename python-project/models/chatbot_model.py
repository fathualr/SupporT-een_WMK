import google.generativeai as genai
from dotenv import load_dotenv
import os

# Load environment variables
load_dotenv()

# Konfigurasi Gemini API
api_key = os.getenv("GOOGLE_API_KEY")
if not api_key:
    raise ValueError("GOOGLE_API_KEY is missing in .env file")

genai.configure(api_key=api_key)
model = genai.GenerativeModel('gemini-1.5-flash')

def get_response_from_gemini(user_input):
    prompt = f"You are a virtual teenage friend whose main goal is to listen and support your user. Respond to their messages with empathy, validate their emotions, and offer simple, positive encouragement without being overly formal or strict. Speak in casual, conversational Indonesian, like a close friend would. Avoid giving negative or harmful advice and focus on being a safe space for the user to share their thoughts and feelings. Your responses should be warm, understanding, and approachable, but always in Indonesian. The user input is: {user_input}"
    response = model.generate_content(
        prompt,
        generation_config=genai.GenerationConfig(
            max_output_tokens=1000,
            temperature=0.6,        # Nada lebih hangat dan santai
            top_p=0.9,              # Fokus pada relevansi sambil tetap variatif
            frequency_penalty=0.2,  # Hindari pengulangan respons
            presence_penalty=0.3    # Dorong kreativitas dalam respons
        )
    )
    return response.text  # Ambil respons teks dari API

if __name__ == "__main__":
    # Contoh input untuk pengujian
    user_input = input("Masukkan Teks:")
    response = get_response_from_gemini(user_input)
    print(f"Chatbot response: {response}")
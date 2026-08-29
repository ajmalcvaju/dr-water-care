import './globals.css';
import { QuoteProvider } from '../context/QuoteContext';
import Header from '../components/Header';
import Footer from '../components/Footer';
import QuoteModal from '../components/QuoteModal';
import FloatingButtons from '../components/FloatingButtons';

export const metadata = {
  title: {
    default: 'Aqua Solve Water Clinic | Leading Water Treatment & Purification in Kozhikode, Kerala',
    template: '%s | Aqua Solve Water Clinic'
  },
  description: 'Aqua Solve Water Clinic provides advanced RO, UV, & UF water purifiers, water softeners, iron removal plants, and laboratory water quality testing in Kozhikode, Kerala. Call 94971 50452 / 98462 53025.',
  keywords: 'Aqua Solve Water Clinic, Water Purifier Kozhikode, RO Water Purifier Calicut, Water Softeners Kerala, Water Quality Testing, Thamarassery, Calicut Water Solutions',
  openGraph: {
    title: 'Aqua Solve Water Clinic | Leading Water Treatment in Kerala',
    description: 'Discover premium domestic and industrial water treatment systems, filters, water softeners, and professional lab analysis in Kerala.',
    type: 'website',
  },
  icons: {
    icon: '/favicon.png',
    shortcut: '/favicon.png',
    apple: '/favicon.png',
  }
};

export default function RootLayout({ children }) {
  return (
    <html lang="en">
      <body>
        <QuoteProvider>
          <Header />
          <main>
            {children}
          </main>
          <Footer />
          <QuoteModal />
          <FloatingButtons />
        </QuoteProvider>
      </body>
    </html>
  );
}

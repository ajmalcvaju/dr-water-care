import './globals.css';
import { QuoteProvider } from '../context/QuoteContext';
import Header from '../components/Header';
import Footer from '../components/Footer';
import QuoteModal from '../components/QuoteModal';

export const metadata = {
  title: {
    default: 'Dr. Water Care | Leading Water Treatment & Purification in Kozhikode, Kerala',
    template: '%s | Dr. Water Care'
  },
  description: 'Dr. Water Care provides advanced RO, UV, & UF water purifiers, water softeners, iron removal plants, and laboratory water quality testing in Kozhikode, Kerala. Call 070126 20021.',
  keywords: 'Dr. Water Care, Water Purifier Kozhikode, RO Water Purifier Calicut, Water Softeners Kerala, Water Quality Testing, Eranhipaalam, Calicut Water Solutions',
  openGraph: {
    title: 'Dr. Water Care | Leading Water Treatment in Kerala',
    description: 'Discover premium domestic and industrial water treatment systems, filters, water softeners, and professional lab analysis in Kerala.',
    type: 'website',
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
        </QuoteProvider>
      </body>
    </html>
  );
}

# Plataforma de Entregas Sustentáveis 🌍

Uma plataforma de entregas com foco em sustentabilidade, oferecendo opções de transporte com menor impacto ambiental, como veículos elétricos, bicicletas e agendamento em horários de baixa demanda energética.

## Índice

- [Objetivo](#objetivo)
- [Funcionalidades](#funcionalidades)
- [Tecnologias Utilizadas](#tecnologias-utilizadas)

---

## Objetivo

O objetivo deste projeto é proporcionar aos clientes opções de entrega que minimizem o impacto ambiental. Através do uso de veículos sustentáveis e otimização de horários e rotas, o projeto visa reduzir emissões de CO₂ e maximizar a eficiência energética.

## Funcionalidades

1. **Cadastro e Login de Usuários**:
   - Registro e login de clientes e entregadores.
   - Autenticação segura com JWT.

2. **Opções de Entrega Sustentável**:
   - Filtro de opções de entrega por tipo de veículo: elétrico, bicicleta, etc.
   - Visualização do impacto ambiental estimado para cada tipo de entrega.

3. **Geolocalização e Roteamento**:
   - Uso de APIs de mapas para traçar as rotas mais sustentáveis.
   - Estimativas de tempo de entrega com base no tipo de transporte e no tráfego.

4. **Painel Administrativo**:
   - Gestão de veículos, entregadores e monitoramento de entregas.
   - Relatórios de emissões de CO₂ e análises de impacto ambiental.

5. **Notificações e Pagamento**:
   - Confirmações de pedido e atualização de status via SMS ou push notifications.
   - Sistema seguro de pagamento online.

## Tecnologias Utilizadas

- **Frontend**:
  - [Vue.js](https://vuejs.org/): Para interface do usuário.

- **Backend**:
  - [Laravel](https://laravel.com/): Para a API e lógica de negócios.
  - **Banco de Dados**: Mariadb.
  - **Autenticação**: JWT para autenticação de usuários e integridade de sessões.

- **Infraestrutura**:
  - [AWS](https://aws.amazon.com/): Para hospedagem e escalabilidade do sistema.

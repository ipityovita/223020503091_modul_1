void main() {
  List<Map<String, int>> listMap = [
    {'id': 1, 'value': 10},
    {'id': 2, 'value': 20},
    {'id': 3, 'value': 30},
  ];
  print('\n2. List yang berisikan map:');
  for (var item in listMap) {
    print('ID: ${item['id']}, Value: ${item['value']}');
  } 
}
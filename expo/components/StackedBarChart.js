import Hyperview from 'hyperview';

import {
  StackedBarChart,
} from 'react-native-chart-kit';

import React from 'react';

import { 
  PureComponent, 
  Props,
} from 'react';

// import all the components we are going to use
import {
  SafeAreaView,
  Text,
  View,
  StyleSheet,
  Dimensions,
  ScrollView,
} from 'react-native';

export default class HyperviewStackedBarChart extends PureComponent<Props> {
  static namespaceURI = 'https://pingpongpay.xpx.com.au';
  static localName = 'StackedBarChart';

  render() {
    // Parses the HXML elements attributes.
    // Returns styles and custom props.
    const props = Hyperview.createProps(
      this.props.element,
      this.props.stylesheets,
      this.props.options,
    );

    const data      = props['chartdata']  ? JSON.parse(props['chartdata'])  : [];
    const legend    = props['legend']     ? JSON.parse(props['legend'])     : []; 
    const labels    = props['labels']     ? JSON.parse(props['labels'])     : []; 
    const barColors = props['bar-colors'] ? JSON.parse(props['bar-colors']) : ['#ff33aa', '#ced6e0', '#a4b0be'];

    return (
    <>
      <Text>{props.title}</Text>
      <StackedBarChart
        data={{
          labels: labels,
          legend: legend,
          data: data,
          barColors: barColors,
        }}
        width={Dimensions.get('window').width - 16}
        height={220}
        chartConfig={{
          backgroundColor: '#1cc910',
          backgroundGradientFrom: '#eff3ff',
          backgroundGradientTo: '#efefef',
          decimalPlaces: 2,
          color: (opacity = 1) => `rgba(0, 0, 0, ${opacity})`,
          style: {
            borderRadius: 16,
          },
        }}
        style={{
          marginVertical: 8,
          borderRadius: 16,
        }}
        {...props}
      />
    </>
    );
  }
}